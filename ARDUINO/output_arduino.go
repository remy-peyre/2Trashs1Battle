package main

import (
	"time"

	"github.com/argandas/serial"
)

func main() {
	sp := serial.New()
	err := sp.Open("COM3", 9600, time.Second*1)
	if err != nil {
		panic(err)
	}
	defer sp.Close()
	sp.Println("AT")
	sp.WaitForRegexTimeout("OK.*", time.Second*10)
}
