from django.contrib import admin

# Register your models here.
def home(request):
    return render(request, 'home.html')

def form(request):
    return render(request, 'form.html')

def view(request):
    return render(request, 'view.html')

