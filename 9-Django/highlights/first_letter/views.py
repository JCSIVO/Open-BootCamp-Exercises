from django.shortcuts import render
from .models import Product

def first(request, letter):
    products = Product.objects.filter(name__istartswith=letter)
    return render(request, 'first.html', {'products': products})

    