import requests
import cv2 as cv2
from pprint import pprint

#POST Request
regions = ['mx', 'in'] 
path = 'NumberPLate\car3.jpg'
with open(path, 'rb') as fp:
    response = requests.post(
        'https://api.platerecognizer.com/v1/plate-reader/',
        data=dict(regions=regions),  
        files=dict(upload=fp),
        headers={'Authorization': 'Token 2288aaff3fbf7a762960a9f85c70516fcf0325a4'})
plateno = response.json()['results'][0]['plate']
print(plateno)  

#GET Request
username ="spartex"
url1 = "http://www.carregistrationapi.in/api/reg.asmx/CheckIndia?RegistrationNumber="+plateno+"&username="+username

response1 = requests.get(url1)
print (response1.content)



img = cv2.imread(path)
width = int(img.shape[1])
height = int(img.shape[0])
outx = 800
outy = 600
ymul = float(outy/height)
xmul =  float(outx/width)
x1 = int(response.json()['results'][0]['box']['xmin']*xmul)
y1 = int(response.json()['results'][0]['box']['ymin']*ymul)
x2 = int(response.json()['results'][0]['box']['xmax']*xmul)
y2 = int(response.json()['results'][0]['box']['ymax']*ymul)
img = cv2.resize(img,(outx,outy),interpolation = cv2.INTER_AREA)


cv2.rectangle(img, (x1, y1), (x2, y2), (0,255,0), 2 )
cv2.rectangle(img, (0, 0), (130, 20), (0,0,0), -1 )

cv2.putText(img, plateno.upper() ,(0,15),cv2.FONT_HERSHEY_COMPLEX,1/2,(255,255,255),1,1)




cv2.imshow("Output",img)
cv2.waitKey(0)
cv2.destroyAllWindows()