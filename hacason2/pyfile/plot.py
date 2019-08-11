import numpy as np
import matplotlib
matplotlib.use('Agg')
import matplotlib.pyplot as plt
 
# 折れ線グラフを出力
left = np.array([2012,2013,2015,2017,2019])
with open("/var/www/html/hack/poke/text/kakin.txt") as f:
    num = f.read().split()

num_length = len(num)
i = 0
j = 0
sum = 0
tmp = []

for l in num:
    sum += int(l)
    i+=1
    if(i == (num_length-4)):
        tmp.append(sum)

    if(i == (num_length-3)):
        tmp.append(sum)

    if(i == (num_length-2)):
        tmp.append(sum)

    if(i == (num_length-1)):
        tmp.append(sum)

    if(i == num_length):
        tmp.append(sum)
        
height = np.array([tmp[0], tmp[1], tmp[2], tmp[3], tmp[4]])
plt.plot(left, height)
plt.savefig('/var/www/html/hack/images/figure.png')
