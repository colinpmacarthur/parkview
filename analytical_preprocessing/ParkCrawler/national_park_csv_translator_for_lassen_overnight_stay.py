##this script is written to merge lassen NP's overnight stay
##data csv files which were downloaded from the US national park website

import csv

listcsv = []
hituyou = []
final = []
filelist = ['0501.csv', '0502.csv', '0503.csv', '0504.csv', '0505.csv', '0506.csv', '0507.csv', '0508.csv', '0509.csv', '0510.csv', '0511.csv', '0512.csv', '0601.csv', '0602.csv', '0603.csv', '0604.csv', '0605.csv', '0606.csv', '0607.csv', '0608.csv', '0609.csv', '0610.csv', '0611.csv', '0612.csv', '0701.csv', '0702.csv', '0703.csv', '0704.csv', '0705.csv', '0706.csv', '0707.csv', '0708.csv', '0709.csv', '0710.csv', '0711.csv', '0712.csv', '0801.csv', '0802.csv', '0803.csv', '0804.csv', '0805.csv', '0806.csv', '0807.csv', '0808.csv', '0809.csv', '0810.csv', '0811.csv', '0812.csv', '0901.csv', '0902.csv', '0903.csv', '0904.csv', '0905.csv', '0906.csv', '0907.csv', '0908.csv', '0909.csv', '0910.csv', '0911.csv', '0912.csv', '1001.csv', '1002.csv', '1003.csv', '1004.csv', '1005.csv', '1006.csv', '1007.csv', '1008.csv', '1009.csv', '1010.csv', '1011.csv', '1012.csv', '1101.csv', '1102.csv', '1103.csv', '1104.csv', '1105.csv', '1106.csv', '1107.csv', '1108.csv', '1109.csv', '1110.csv', '1111.csv', '1112.csv', '1201.csv', '1202.csv', '1203.csv', '1204.csv', '1205.csv', '1206.csv', '1207.csv', '1208.csv', '1209.csv', '1210.csv', '1211.csv', '1212.csv', '1301.csv', '1302.csv', '1303.csv', '1304.csv', '1305.csv', '1306.csv', '1307.csv', '1308.csv', '1309.csv', '1310.csv', '1311.csv', '1312.csv', '1401.csv']

for filename in filelist:
    print(filename)
    f = open(filename, "r", encoding="utf-8")
    dataReader = csv.reader(f)
    for row in dataReader:
        listcsv.append(row)
    print(listcsv)

    concessl = []
    concessl.append(listcsv[4][0])
    concessl.append(listcsv[4][1])
    concessl.append('Concessioner Lodging')
    concessl.append(listcsv[4][13].replace(',', ''))
    hituyou.append(concessl)

    concessc = []
    concessc.append(listcsv[4][0])
    concessc.append(listcsv[4][1])
    concessc.append('Concessioner Campgrounds')
    concessc.append(listcsv[4][15].replace(',', ''))
    hituyou.append(concessc)

    npst = []
    npst.append(listcsv[4][0])
    npst.append(listcsv[4][1])
    npst.append('NPS Campgrounds Tents')
    npst.append(listcsv[4][17].replace(',', ''))
    hituyou.append(npst)

    npsrv = []
    npsrv.append(listcsv[4][0])
    npsrv.append(listcsv[4][1])
    npsrv.append('NPS Campgrounds RV')
    npsrv.append(listcsv[4][20].replace(',', ''))
    hituyou.append(npsrv)

    npsbc = []
    npsbc.append(listcsv[4][0])
    npsbc.append(listcsv[4][1])
    npsbc.append('NPS Backcountry')
    npsbc.append(listcsv[4][21].replace(',', ''))
    hituyou.append(npsbc)

    npsmisc = []
    npsmisc.append(listcsv[4][0])
    npsmisc.append(listcsv[4][1])
    npsmisc.append('NPS Miscellaneous')
    npsmisc.append(listcsv[4][24].replace(',', ''))
    hituyou.append(npsmisc)

    nonrec = []
    nonrec.append(listcsv[4][0])
    nonrec.append(listcsv[4][1])
    nonrec.append('Non-Recreational ON stays')
    nonrec.append(listcsv[4][26].replace(',', ''))
    hituyou.append(nonrec)

    final.append(hituyou)

    hituyou = []
    listcsv = []

    f2 = open('newfile1.txt', 'a')
    final = str(final)
    final = final.replace('], [', '\n')
    final = final.replace(', ', ',')
    final = final.replace('/', ',')
    final = final.replace('\'', '')
    final = final.replace(']]][[[', '\n')
    f2.write(str(final))
    print(final)
    final = []
    f2.close()
