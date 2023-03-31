from django.shortcuts import render

def index(request):
    return render(request, 'index.html', {})

def herencia(request):
    return render(request, 'herencia.html', {})

def ejemplo(request):
    return render(request, 'ejemplo.html', {})

def otra(request):
    return render(request, 'otra.html', {})