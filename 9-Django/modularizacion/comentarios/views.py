from django.shortcuts import render
from django.http import HttpResponse
from .models import Comment
# Create your views here.

def test(request):
    return HttpResponse('Funciona correctamente')

def create(request):
    # comment = Comment(name="Isabel", score=5, comment="Este es un comentario")
    # comment.save()
    # otra manera de generar un comentario
    comment = Comment.objects.create(name='Blanca')
    return HttpResponse('Ruta para probar la creción de modelos')

def delete(request):
    # comment = Comment.objects.get(id=1) #Borramos comentario con id=1
    # comment.delete()
    # Borrado directo
    Comment.objects.filter(id=2).delete()
    return HttpResponse("Ruta para probar los borrados")