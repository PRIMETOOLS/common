import sys




def fun(s1, s2):
    if len(s1) > len(s2):
        s1, s2 = s2, s1
    p = 0
    for i in range(len(s1)):
        if s1[i] == s2[i]:
            p += 1
    return int(int(p/len(s1)*100))


def lerrning(string):

	r = ['привет', 'пока', 'как дела?']
	y = ['здравствуйте','досвидания', 'пойдет']

	e = {'привет':{'здравчствуйте','приведствую','че надо','иди нахуй'}}

	t = len(r)
	for i in range(0,t):
		a = fun(string, r[i])

		if(a > 60 or a == 60):
			try:
				print(a)
				print(y[i])
			except:
				print('К сожелению ответа на этот вопрос нет')
			break

def main():
	a = lerrning(sys.argv[1])



if __name__ == '__main__':
	main()
