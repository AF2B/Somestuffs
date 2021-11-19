from django.shortcuts import render, redirect
from APP.forms import Alunosform
from APP.models import Alunos

# Create your views here.
def home(request):
    data = {}
    data['db'] = Alunos.objects.all()
    return render(request, 'index.html', data)


def form(request):
    data = {}
    data['form'] = Alunosform()
    return render(request, 'form.html', data)


def create(request):
    form = Alunosform(request.POST or None)
    if form.is_valid():
        form.save()
        return redirect('home')
    
    
def view(request, pk):
    data = {}
    data['db'] = Alunos.objects.get(pk=pk)
    return render(request, 'view.html', data)


def edit(request, pk):
    data = {}
    data['db'] = Alunos.objects.get(pk=pk)
    data['form'] = Alunosform(request.POST or None, instance=data['db'])
    if data['form'].is_valid():
        data['form'].save()
        return redirect('home')
    return render(request, 'form.html', data)


def update(request, pk):
    data = {}
    data ['db'] = Alunos.objects.get(pk=pk)
    form = Alunosform(request.POST or None, instance=data['db'])
    if form.is_valid():
        form.save()
    return redirect('home')


def delete(request, pk):
    db = Alunos.objects.get(pk=pk)
    db.delete()
    return redirect('home')