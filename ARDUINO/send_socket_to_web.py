import asyncio
import datetime
import random
import websockets
import serial

ser = serial.Serial("COM3",timeout=3) #get the port serial output for the arduino

async def time(websocket, path): #websocket 
    while True:
        donnee=str(ser.readline().decode().strip('\r\n')) 
        #now = datetime.datetime.utcnow().isoformat() + 'Z'
        await websocket.send(donnee)
        await asyncio.sleep(random.random() * 1)

start_server = websockets.serve(time, '127.0.0.1', 5678)

asyncio.get_event_loop().run_until_complete(start_server)
asyncio.get_event_loop().run_forever()