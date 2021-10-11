#GroupB4
#Title - Hand Gesture controlled Volume controller using OpenCV
#Team Memebers -
    #Mausam Singh
    #Nishant Shinde
    #Vedant Garode


import cv2
import numpy as np
import math
import pyautogui as p

cam = cv2.VideoCapture(0, cv2.CAP_DSHOW)


def empty(x):
    pass

cv2.namedWindow("Filter",cv2.WINDOW_NORMAL)
cv2.resizeWindow("Filter",300,100)
cv2.createTrackbar("Thresh", "Filter", 0, 255, empty)
cv2.createTrackbar("L_Hue", "Filter", 0, 255, empty)
cv2.createTrackbar("U_Hue", "Filter", 255, 255, empty)
cv2.createTrackbar("L_Sat", "Filter", 0, 255, empty)
cv2.createTrackbar("U_Sat", "Filter", 255, 255, empty)
cv2.createTrackbar("L_Value", "Filter", 0, 255, empty)
cv2.createTrackbar("U_Value", "Filter", 255, 255, empty)

while True:
    suc , frame = cam.read()
    frame = cv2.flip(frame, 2)
    frame = cv2.resize(frame, (600, 500))
    crop_image = frame[1:500, 0:300]

    hsv = cv2.cvtColor(crop_image, cv2.COLOR_BGR2HSV)

    l_h = cv2.getTrackbarPos("L_Hue", "Filter")
    u_h = cv2.getTrackbarPos("U_Hue", "Filter")
    l_s = cv2.getTrackbarPos("L_Sat", "Filter")
    u_s = cv2.getTrackbarPos("U_Sat", "Filter")
    l_v = cv2.getTrackbarPos("L_Value", "Filter")
    u_v = cv2.getTrackbarPos("U_Value", "Filter")


    lower_bound = np.array([l_h, l_s, l_v])
    upper_bound = np.array([u_h, u_s, u_v])

    mask = cv2.inRange(hsv, lower_bound, upper_bound)

    filtr = cv2.bitwise_and(crop_image, crop_image, mask=mask)

    mask1 = cv2.bitwise_not(mask)
    m_g = cv2.getTrackbarPos("Thresh", "Filter")
    ret, thresh = cv2.threshold(mask1, m_g, 255, cv2.THRESH_BINARY)
    dilata = cv2.dilate(thresh, (3, 3), iterations=6)


    cnts, hier = cv2.findContours(thresh, cv2.RETR_TREE, cv2.CHAIN_APPROX_SIMPLE)

    try:
        cm = max(cnts, key=lambda x: cv2.contourArea(x))
        epsilon = 0.0005 * cv2.arcLength(cm, True)
        data = cv2.approxPolyDP(cm, epsilon, True)
        hull = cv2.convexHull(cm)
        cv2.drawContours(crop_image, [cm], -1, (50, 50, 150), 2)
        cv2.drawContours(crop_image, [hull], -1, (0, 255, 0), 2)

        hull = cv2.convexHull(cm, returnPoints=False)
        defects = cv2.convexityDefects(cm, hull)
        count_defects = 0

        for i in range(defects.shape[0]):
            s, e, f, d = defects[i, 0]

            start = tuple(cm[s][0])
            end = tuple(cm[e][0])
            far = tuple(cm[f][0])

            a = math.sqrt((end[0] - start[0]) ** 2 + (end[1] - start[1]) ** 2)
            b = math.sqrt((far[0] - start[0]) ** 2 + (far[1] - start[1]) ** 2)
            c = math.sqrt((end[0] - far[0]) ** 2 + (end[1] - far[1]) ** 2)
            angle = (math.acos((b ** 2 + c ** 2 - a ** 2) / (2 * b * c)) * 180) / 3.14

            if angle <= 50:
                count_defects += 1
                cv2.circle(crop_image, far, 5, [255, 255, 255], -1)

        print("count==", count_defects)


        if count_defects == 0:
            cv2.putText(frame, "Nothing ", (50, 50), cv2.FONT_HERSHEY_SIMPLEX, 2, (0, 0, 255), 2)
        elif count_defects == 1:
            p.press("up")
            cv2.putText(frame, "Volume UP", (5, 50), cv2.FONT_HERSHEY_SIMPLEX, 2, (0, 0, 255), 2)
        elif count_defects == 2:
            p.press("down")
            cv2.putText(frame, "Volume Down", (50, 50), cv2.FONT_HERSHEY_SIMPLEX, 2, (0, 0, 255), 2)
        elif count_defects == 3:
            p.press("right")
            cv2.putText(frame, "Forward", (50, 50), cv2.FONT_HERSHEY_SIMPLEX, 2, (0, 0, 255), 2)
        elif count_defects == 4:
            p.press("space")
            cv2.putText(frame, "Play/Pause", (50, 50), cv2.FONT_HERSHEY_SIMPLEX, 2, (0, 0, 255), 2)

        else:
            pass

    except:
        pass

    cv2.imshow("Thresh", thresh)
    cv2.imshow("Result", frame)

    key= cv2.waitKey(33) & 0xFF
    if key == ord('q'):
        break
cam.release()
cv2.destroyAllWindows()



