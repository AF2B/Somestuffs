from django.forms import ModelForm
from app.models import Alunos


class Alunosform(ModelForm):
    class Meta:
        model = Alunos
        fields = ['nome', 'cpf', 'avaliacao']
        