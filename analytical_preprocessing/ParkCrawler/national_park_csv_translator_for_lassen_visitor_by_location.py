##this script is written to merge lassen NP's visitor
##data csv files which were downloaded from the US national park website

import csv

listcsv = []
hituyou = []
final = []
filelist = ['0501.csv', '0502.csv', '0503.csv', '0504.csv', '0505.csv', '0506.csv', '0507.csv', '0508.csv', '0509.csv', '0510.csv', '0511.csv', '0512.csv', '0601.csv', '0602.csv', '0603.csv', '0604.csv', '0605.csv', '0606.csv', '0607.csv', '0608.csv', '0609.csv', '0610.csv', '0611.csv', '0612.csv', '0701.csv', '0702.csv', '0703.csv', '0704.csv', '0705.csv', '0706.csv', '0707.csv', '0708.csv', '0709.csv', '0710.csv', '0711.csv', '0712.csv', '0801.csv', '0802.csv', '0803.csv', '0804.csv', '0805.csv', '0806.csv', '0807.csv', '0808.csv', '0809.csv', '0810.csv', '0811.csv', '0812.csv', '0901.csv', '0902.csv', '0903.csv', '0904.csv', '0905.csv', '0906.csv', '0907.csv', '0908.csv', '0909.csv', '0910.csv', '0911.csv', '0912.csv', '1001.csv', '1002.csv', '1003.csv', '1004.csv', '1005.csv', '1006.csv', '1007.csv', '1008.csv', '1009.csv', '1010.csv', '1011.csv', '1012.csv', '1101.csv', '1102.csv', '1103.csv', '1104.csv', '1105.csv', '1106.csv', '1107.csv', '1108.csv', '1109.csv', '1110.csv', '1111.csv', '1112.csv', '1201.csv', '1202.csv', '1203.csv', '1204.csv', '1205.csv', '1206.csv', '1207.csv', '1208.csv', '1209.csv', '1210.csv', '1211.csv', '1212.csv', '1301.csv', '1302.csv', '1303.csv', '1304.csv', '1305.csv', '1306.csv', '1307.csv', '1308.csv', '1309.csv', '1310.csv', '1311.csv', '1312.csv', '1401.csv']

#for filename in range(501, 512):
#    filename1 = str(filename)
#    filename1 = '0' + filename1 + '.csv'
for filename in filelist:
    print(filename)
    f = open(filename, "r", encoding="utf-8")
    dataReader = csv.reader(f)
    for row in dataReader:
        listcsv.append(row)
    for cnt in range(4, 7):
        hituyou.append(listcsv[1][0])
        hituyou.append(listcsv[1][1])
        hituyou.append(listcsv[cnt][1])
        hituyou.append(listcsv[cnt][2].replace(',', ''))
        final.append(hituyou)
        hituyou = []
    listcsv = []
    f2 = open('newfile1.txt', 'a')
    final = str(final)
    final = final.replace('], [', '\n')
    final = final.replace('Report Date: ','')
    final = final.replace('Jan ', '1,')
    final = final.replace('Feb ', '2,')
    final = final.replace('Mar ', '3,')
    final = final.replace('Apr ', '4,')
    final = final.replace('May ', '5,')
    final = final.replace('Jun ', '6,')
    final = final.replace('Jul ', '7,')
    final = final.replace('Aug ', '8,')
    final = final.replace('Sep ', '9,')
    final = final.replace('Oct ', '10,')
    final = final.replace('Nov ', '11,')
    final = final.replace('Dec ', '12,')
    final = final.replace(', ', ',')
    final = final.replace('\'', '')
    f2.write(str(final))
    print(final)
    final = []
    f2.close()

