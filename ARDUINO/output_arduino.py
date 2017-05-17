import serial
ser = serial.Serial("COM3",timeout=3)
file = open("output.txt","a") 
while 1:
    donnee=str(ser.readline().decode().strip('\r\n'))
    file.write(donnee) 
    file.write("\n")
    print(donnee)
file.close()

