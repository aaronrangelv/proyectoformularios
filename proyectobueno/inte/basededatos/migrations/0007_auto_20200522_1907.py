# Generated by Django 3.0.5 on 2020-05-23 00:07

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('basededatos', '0006_auto_20200522_1905'),
    ]

    operations = [
        migrations.AlterField(
            model_name='parquimetros',
            name='tipo',
            field=models.CharField(blank='True', max_length=50),
        ),
        migrations.AlterField(
            model_name='parquimetros',
            name='user',
            field=models.CharField(blank='True', max_length=8, verbose_name='Nombre del agente'),
        ),
    ]