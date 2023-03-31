from django.db import models

class Employee(models.Model):
    name = models.CharField(max_length=50, blank=False, null=False)
    last_name = models.CharField(max_length=50, blank=False, null=False)
    email = models.EmailField(max_length=50, blank=False, null=False)

    def __str__(self):
        return self.name
