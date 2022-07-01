from django.contrib import admin

# Register your models here.
from .models import Director, Pelicula

admin.site.register(Director)
admin.site.register(Pelicula)