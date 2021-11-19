from django.db import models

# Create your models here.
class Alunos(models.Model):
    matricula = models.IntegerField(primary_key=True)
    nome = models.CharField(max_length=150)
    cpf = models.IntegerField(max_length=100)
    avaliacao = models.IntegerField(max_length=4)

    def cpf_formatado(self):
        return f'{self.cpf[0:3]}.{self.cpf[3:6]}.{self.cpf[6:9]}-{self.cpf[9:11]}'
    cpf_formatado.short_description = 'dbs.cpf'