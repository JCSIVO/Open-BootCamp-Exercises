from pyexpat import model
from turtle import title
from django.db import models

# Create your models here.

class Director(models.Model):
    name = models.CharField(max_length=66, help_text='Indica el nombre del Director')
    last_name = models.CharField(max_length=100)
    
    def __str__(self):
        return self.name
    
class Pelicula(models.Model):
    title = models.CharField(max_length=35)
    summary = models.TextField(max_length=100, help_text='Sinopsis de la pelicula')
    genre = models.CharField('Genereo', max_length=15, help_text='Indica el genero de la pelicula')
    director = models.ManyToManyField(Director)
    
    def __str__(self):
        return self.title
    
    
    