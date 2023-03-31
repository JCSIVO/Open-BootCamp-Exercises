from django.shortcuts import render, redirect
from .models import Todo
from .forms import TodoForm
from django.contrib import messages

def index(request):
    todos = Todo.objects.filter(title__contains=request.GET.get('search', ''))
    context = {
        'todos': todos
    }
    return render(request, 'todo/index.html', context)

def view(request, id):
    todo = Todo.objects.get(id=id)
    context = {
        'todo': todo
    }
    return render(request, 'todo/detail.html', context)

def edit(request, id):
    todo = Todo.objects.get(id=id)

    if request.method == 'GET':
        form = TodoForm(instance=todo)
        context = {
            'form': form,
            'id': id
        }
        return render(request, 'todo/edit.html', context)

    if request.method == 'POST':
        form = TodoForm(request.POST, instance=todo)
        if form.is_valid():
            form.save()
        messages.success(request, 'Tarea Actualizada')
        context = {
            'form': form,
            'id': id
        }
        return render(request, 'todo/edit.html', context)


def create(request):
    if request.method == 'GET':
        form = TodoForm()
        context = {
        'form': form
        }
        return render(request, 'todo/create.html', context)
    if request.method == 'POST':
        form = TodoForm(request.POST)
        if form.is_valid():
            form.save()
        return redirect('todo')

def delete(request, id):
    todo = Todo.objects.get(id=id)
    todo.delete()
    return redirect('todo')