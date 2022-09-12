from threading import local
import time

local_time = time.ctime()
hora = int (time.strftime('%H'))
minutos = int(time.strftime('%M'))
print('Hora local: ', local_time)

if(hora >= 19):
    print('Ha finalizado tu jornada')
else:
    print('aun te quedan {} horas y {} minutos para ir a casa'.format(18-int(hora), 59-int(minutos)))