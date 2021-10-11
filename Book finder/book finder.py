import bs4
import requests
base_link='https://books.toscrape.com/catalogue/page-{}.html'
for i in range(1,50):
    main_link = requests.get(base_link.format(i))
    soup = bs4.BeautifulSoup(main_link.text,'lxml')
    for j in range (1,20):
        product = soup.select('.product_pod')[j]
        if (product.select('.star-rating.Five')==[]):
            pass
        else:
            print("Page no :{}".format(i))
            if (i==1):
                print("Book no :{}".format(j+1))
            else:
                k = ((i-1)*10)+(j+1)
                print("Book no :{}".format(k))
            print('{}'.format(j)+" "+str(product.select('a')[1]['title']),'\n')
