from django.forms import ModelForm
from APP.models import Carros

# Create the form class.
class Carrosform(ModelForm):
     class Meta:
         model = Carros
         fields = ['modelo', 'marca', 'ano']
