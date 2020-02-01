from django.db import models
from map.models import *
# Create your models here.

class Message(models.Model):
    _from = models.ForeignKey(Profile, on_delete=models.CASCADE,related_name="+")
    to = models.ForeignKey(Profile, on_delete=models.CASCADE,related_name="+")
    date = models.DateTimeField(auto_now=True)
    body = models.CharField(max_length=250)
    attachment = models.FileField(blank=True)

    # class Meta:
    #     permissions = [
    #         ("change_task_status", "Can change the status of tasks"),
    #         ("close_task", "Can remove a task by setting its status as closed"),
    #     ]