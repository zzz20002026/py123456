from bs4 import BeautifulSoup
import requests
r = requests.get("http://210.70.80.21/~s108021085/indexx.html")
r.encoding = "utf-8"
html_doc = r.text
print(r.status_code)
out_file = open('downloadPage.html','w', encoding="utf-8")
out_file.write(r.text)
print('done')
out_file.close()
soup = BeautifulSoup(html_doc, 'html.parser')
print("--------------------------")
print(soup.title)
print("--------------------------")
a_tags = soup.find_all('a')
for tag in a_tags:
    print(tag.string, "-->", tag.get('href'))