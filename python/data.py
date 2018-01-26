

f = open('node.txt')
l = f.read()
f.close()

fsecond = open('node2.txt')
le = fsecond.read()
fsecond.close()

print(str(l)+'\n'+str(le))