#include <RF24Network.h>
#include <RF24.h>
#include<SPI.h>


RF24 radio(7, 8);
RF24Network network(radio);

const uint16_t master = 00;
const uint16_t pir = 01;
const uint16_t magSwitch = 02;
const uint16_t temphumd = 03;

struct payload_t {                  // Structure of our payload
  float temperature;
  float humidity;
};



void setup() {
  Serial.begin(9600);
  Serial.println("RF24Network Begins..");
  SPI.begin();
  radio.begin();
  network.begin(100,master);
}

void loop() {
  network.update();

while(network.available()){
  RF24NetworkHeader header;
  payload_t payload;
  network.read(header,&payload,sizeof(payload));
    Serial.print("Temperature:");
    Serial.println(payload.temperature);
    Serial.print("Humidity:");
    Serial.println(payload.humidity);
}
  

}
