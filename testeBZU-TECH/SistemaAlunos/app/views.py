from django.shortcuts import render, redirect
from app.forms import Alunosform
from app.models import Alunos

# Create your views here.
def home(request):
    data = {}
    data['db'] = Alunos.objects.all()
    return render(request, 'index.html', data)

def form(request):
    data = {}
    data['form'] = 'Alunosform'
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
    data['form'] = Alunosform (instance=data['db'])
    return render(request, 'form.html', data)

def update(request, pk):
    data = {}
    data['db'] = Alunos.objects.get(pk=pk)
    form = Alunosform(request.POST or None, instance=data['db'])
    if form.is_valid():
        form.save()
        redirect('home')