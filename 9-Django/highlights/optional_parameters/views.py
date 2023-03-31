from django.shortcuts import render

def optional(request, name= 'Nombre por defecto'):
    return render(request, 'optional.html', {'name': name})