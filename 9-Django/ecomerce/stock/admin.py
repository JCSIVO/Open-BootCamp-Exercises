from django.contrib import admin
from .models import Product

class ProductAdmin(admin.ModelAdmin):
    list_display = ("name", "Short_description", "stock",)
    search_fields = ("name", "Short_description",)
    list_filter = ("discount_until", "stock",)
    date_hierarchy = "discount_until"

admin.site.register(Product, ProductAdmin)