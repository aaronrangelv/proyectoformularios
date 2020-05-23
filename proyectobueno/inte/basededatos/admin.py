from django.contrib import admin

from basededatos.models import Usuario, Infraccion, Parquimetros, Multas

class UsuarioAdmin(admin.ModelAdmin):
    list_display=("user", )
    search_fields=("user", "pas")

class InfraccionAdmin(admin.ModelAdmin):
    list_display=("folio", "fecha", "user")
    list_filter=("fecha", )
    search_fields=("folio", "fecha", "user")

class ParquimetrosAdmin(admin.ModelAdmin):
    list_display=("folio", "matricula", "user")
    list_filter=("user", )
    search_fields=("folio", "matricula", "user")

class MultasAdmin(admin.ModelAdmin):
    list_display=("folio", "tipo")
    list_filter=("tipo", )
    search_fields=("folio", "tipo")

admin.site.register(Usuario, UsuarioAdmin)
admin.site.register(Infraccion, InfraccionAdmin)
admin.site.register(Parquimetros, ParquimetrosAdmin)
admin.site.register(Multas, MultasAdmin)
# Register your models here.
