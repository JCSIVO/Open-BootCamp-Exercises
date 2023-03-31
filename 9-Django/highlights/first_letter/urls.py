from django.contrib import admin
from django.urls import path

urlpatterns = [
    path('<letter>/', views.first, name='first'),
]
