from django.db import models

# Create your models here.
class Usuario(models.Model):
    user=models.CharField(max_length=8)
    pas=models.CharField(max_length=8)


class Infraccion(models.Model):
    folio=models.CharField(max_length=100, verbose_name="Numero de folio")
    nombreinfractor=models.CharField(max_length=50, verbose_name="Nombre del Infractor")
    marca=models.CharField(max_length=50)
    modelo=models.CharField(max_length=50)
    tipo=models.CharField(max_length=50)
    no_economico=models.CharField(max_length=50, verbose_name="Numero del economico")
    ruta=models.CharField(max_length=50)
    lugar=models.CharField(max_length=50)
    fecha=models.DateField(max_length=50)
    hora=models.CharField(max_length=50)
    clave=models.CharField(max_length=100, verbose_name="Clave de accion")
    motivo=models.CharField(max_length=80)
    garantia=models.CharField(max_length=50)
    arti=models.IntegerField(verbose_name="Articulo del Reglamento")
    matricula=models.CharField(max_length=50)
    cardcirculacion=models.CharField(max_length=50, verbose_name="Numero de Circulacion")
    user=models.CharField(max_length=8, verbose_name="Nombre del agente")

class Parquimetros(models.Model):
    folio=models.CharField(max_length=100, verbose_name="Numero de folio")
    motivo=models.CharField(max_length=100)
    num_estacionamiento=models.CharField(max_length=50,verbose_name="Numero de Estacionamiento")
    manzana=models.CharField(max_length=50)
    sector=models.CharField(max_length=50)
    calle=models.CharField(max_length=50)
    vencimiento=models.CharField(max_length=50)
    nombreinfractor=models.CharField(max_length=50, verbose_name="Nombre del Infractor")
    matricula=models.CharField(max_length=50, verbose_name="Numero de Matricula")
    color=models.CharField(max_length=50)
    num_permiso=models.IntegerField(verbose_name="Numero de permiso")
    marca=models.CharField(max_length=50)
    serie=models.CharField(max_length=50)
    foliodepago=models.CharField(max_length=50)
    fecha=models.DateField(max_length=50, blank="True")
    hora=models.CharField(max_length=50)
    tipo=models.CharField(max_length=50)
    user=models.CharField(max_length=8,verbose_name="Nombre del agente", blank="True")



class Multas(models.Model):
    folio=models.CharField(max_length=50, verbose_name="Numero de folio")
    tipo=models.CharField(max_length=50, verbose_name="Tipo de multa")
