package com.saludo.saludo2;


import org.springframework.stereotype.Component;

@Component
public class UserService {
    public NotificationService notification;

    //public UserService(){}

    
    public UserService(NotificationService notification){
        this.notification = notification;
    }

    public NotificationService getnotification(){
        System.out.println(notification);
        return notification;
    }

    public void setnotification(NotificationService notification){
        this.notification = notification;
    }
}
