import com.smartDevices.SmartDevice;

import javax.swing.plaf.synth.SynthOptionPaneUI;
import java.util.*;
public class Main {


    public static void main(String[] args) {
        SmartDevice.SmartPhone iphone = new SmartDevice.SmartPhone("Apple", "Iphone10", "Plateado", 5, 8, "IOS 15.5");
        SmartDevice.SmartWatch xiaomi = new SmartDevice.SmartWatch("Xiaomi", "Redmi5", "azul", 1, 3.4, "Bluetooh", "deportiva");

        System.out.println("Hoy me he comprado el SmartPhone: " + iphone + " junto con el SmartWach: " + xiaomi);
        System.out.println("El SmartpPhone es: " + iphone);
        System.out.println("El sMARTwATCH ES: " + xiaomi);

    }
}