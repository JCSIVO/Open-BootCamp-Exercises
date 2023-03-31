from django.shortcuts import render

def index(request):
    return render(request, 'index.html', {})

def portfolio(request):
    return render(request, 'portfolio.html', {})