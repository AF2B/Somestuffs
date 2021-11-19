from django.db import models

# Create your models here.
class Alunos(models.Model):
    nome = models.CharField(max_length=150)
    cpf = models.IntegerField(max_length=100)
    avaliacao = models.IntegerField(max_length=4)