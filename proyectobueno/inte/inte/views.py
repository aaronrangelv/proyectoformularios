from django.http import HttpResponse
import datetime
from django.shortcuts import render
from django.template import Template, Context
from basededatos.models import Usuario, Infraccion, Parquimetros, Multas
from random import randint, uniform,random

def salud(request):
    doc_externo=open("C:/Users/Usuario/Desktop/proyectobueno/inte/inte/templates/index.html")

    plt = Template(doc_externo.read())
    doc_externo.close()
    ctx = Context()
    documento=plt.render(ctx)
    return HttpResponse(documento)

def step1(request):
    doc2_externo=open("C:/Users/Usuario/Desktop/proyectobueno/inte/inte/templates/forgot.html")
    plt2 = Template(doc2_externo.read())
    doc2_externo.close()
    ctx2 = Context()
    documento2=plt2.render(ctx2)
    return HttpResponse(documento2)
def step2(request):
    bandera=request.GET["usuario"]
    bandera2=request.GET["contra"]
    new1 = randint(1,10000)
    us=Usuario.objects.filter(user__icontains=bandera).values_list('user', flat=True).order_by('id')
    us2=Usuario.objects.filter(pas__icontains=bandera2).values_list('pas', flat=True).order_by('id')
    if us:
        if bandera[0]=='a':
            if bandera2 in us2:


                return render(request, "cap2.php", {"new1":new1, "query":bandera, "query2":bandera2})
            else:
                return render(request, "cap1.html")

        if bandera[0]=='p':
            if bandera2 in us2:
                return render(request, "cap3.html", {"new1":new1, "query":bandera ,"query2":bandera2})
            else:
                return render(request, "cap1.html")

        else:
            return render(request, "cap1.html")

    else:

        return render(request, "cap1.html")

def step3(request):
    p = Parquimetros(folio=request.GET["pf"],
    motivo=request.GET["p1"],
    num_estacionamiento=request.GET["p2"],
    manzana=request.GET["p3"],
    sector=request.GET["p4"],
    calle=request.GET["p5"],
    vencimiento=request.GET["p6"],
    nombreinfractor=request.GET["p7"],
    matricula=request.GET["p8"],
    color=request.GET["p11"],
    num_permiso=request.GET["p10"],
    marca=request.GET["p12"],
    foliodepago=request.GET["p14"],
    tipo=request.GET["p13"],
    serie=request.GET["p15"],
    fecha=request.GET["p16"],
    hora=request.GET["p17"],
    user=request.GET["pu"]
)
    p.save()
    p2= Multas(folio=request.GET["pf"],
    tipo='Parquimetros')
    p2.save()
    return render(request, "cap4.html", {"quer":request.GET["pu"], "pas":request.GET["pp"]})

def step4(request):
    p = Infraccion(folio=request.GET["tf"],
    nombreinfractor=request.GET["t1"],
    marca=request.GET["t2"],
    modelo=request.GET["t3"],
    tipo=request.GET["t4"],
    no_economico=request.GET["t5"],
    ruta=request.GET["t15"],
    lugar=request.GET["t14"],
    fecha=request.GET["t9"],
    hora=request.GET["t7"],
    clave=request.GET["t12"],
    motivo=request.GET["t11"],
    garantia=request.GET["t13"],
    arti=request.GET["t10"],
    matricula=request.GET["t14"],
    cardcirculacion=request.GET["t15"], user=request.GET["t16"])
    p.save()
    p2= Multas(folio=request.GET["tf"],
    tipo='General')
    p2.save()
    return render(request, "cap4.html", {"quer":request.GET["t16"], "pas":request.GET["tp"]})
