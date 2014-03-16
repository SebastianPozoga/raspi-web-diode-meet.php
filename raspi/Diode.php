<?php

ini_set("enable_dl", "On");
include('wiringpi.php');

define('DIODE_PIN', 7);//GPIO7 (PHYS pin 26)
define('PIN_INPUT', 0);
define('PIN_OUTPUT', 1);

/**
 * Class to manage local diode
 *
 * @author spozoga
 */
class Diode {

    function on() {
        wiringpi::pinMode(DIODE_PIN, PIN_OUTPUT);
        return wiringpi::digitalWrite(DIODE_PIN, 1);
    }

    function off() {
        wiringpi::pinMode(DIODE_PIN, PIN_OUTPUT);
        return wiringpi::digitalWrite(DIODE_PIN, 0);
    }

    function flashing() {
        set_time_limit(5);
        wiringpi::pinMode(DIODE_PIN, PIN_OUTPUT);
        wiringpi::digitalWrite(DIODE_PIN, 1);
        sleep(1);
        wiringpi::digitalWrite(DIODE_PIN, 0);
        sleep(1);
        wiringpi::digitalWrite(DIODE_PIN, 1);
        sleep(1);
        wiringpi::digitalWrite(DIODE_PIN, 0);
    }

}
