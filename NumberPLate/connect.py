import requests
import cv2 as cv2
from pprint import pprint

#POST Request
regions = ['mx', 'in'] 
path = 'car7.jpg'
with open(path, 'rb') as fp:
    response = requests.post(
        'https://api.platerecognizer.com/v1/plate-reader/',
        data=dict(regions=regions),  
        files=dict(upload=fp),
        headers={'Authorization': 'Token 2288aaff3fbf7a762960a9f85c70516fcf0325a4'})
plateno = response.json()['results'][0]['plate']
print(plateno)  

#GET Request
username ="vedant"
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
    

# import sys
# import requests
# from bs4 import BeautifulSoup, SoupStrainer

# home_url = 'https://vahan.parivahan.gov.in/nrservices/faces/user/citizen/citizenlogin.xhtml'
# post_url = 'https://vahan.parivahan.gov.in/nrservices/faces/user/citizen/searchstatus.xhtml'
# # Everything before the last four digits: MH02CL
# first = 'MH12DE'
# # The last four digits: 0555
# second = '1433'

# r = requests.get(url=home_url)
# # print(r.text)
# cookies = r.cookies
# # print(cookies)
# soup = BeautifulSoup(r.text, 'html.parser')
# # print(soup)
# viewstate = soup.select('input[name="javax.faces.ViewState"]')[0]['value']
# print(viewstate)
# data = {
#     'javax.faces.partial.ajax':'true',
#     'javax.faces.source': 'form_rcdl:j_idt32',
#     'javax.faces.partial.execute':'@all',
#     'javax.faces.partial.render': 'form_rcdl:pnl_show form_rcdl:pg_show form_rcdl:rcdl_pnl',
#     'form_rcdl:j_idt32':'form_rcdl:j_idt32',
#     'form_rcdl':'form_rcdl',
#     'form_rcdl:tf_reg_no1': first,
#     'form_rcdl:tf_reg_no2': second,
#     'javax.faces.ViewState': viewstate,
# }

# r = requests.post(url=post_url, data=data, cookies=cookies)
# print(r.text)
# soup = BeautifulSoup(r.text, 'html.parser')
# table = SoupStrainer('tr')
# soup = BeautifulSoup(soup.get_text(), 'html.parser', parse_only=table)
# print(soup.get_text())


