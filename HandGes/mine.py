import cv2
import mediapipe as mp
import time 
cam = cv2.VideoCapture(0)
def rescale(frame , scale=0.75):
    width = frame[1]*scale
    height = frame[2]*scale
    dimention = (width ,height)
    return cv2.resize(frame , dimention)
   
while(True):
    success ,img = cam.read()
    
    print(img)
    cv2.imshow('image',img)
    if((cv2.waitKey(33) & 0xFF)==ord('q')):
        break
    

cv2.destroyAllWindows()
