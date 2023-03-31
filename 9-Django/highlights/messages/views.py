from django.shortcuts import render
from django.contrib import messages

def message(request):
    messages.success(request, "Hola, soy un mensaje exitoso")
    return render(request, 'messages.html', {})
