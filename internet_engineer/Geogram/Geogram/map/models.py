from django.db import models
from django.contrib.auth.models import User
# Create your models here.

class Profile(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE)
    lat = models.FloatField()
    lang = models.FloatField()
    follows = models.ManyToManyField('self', related_name='follow', symmetrical=False,blank=True)

    def __str__(self):
        return self.user.username
    
