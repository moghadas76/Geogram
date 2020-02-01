from rest_framework import serializers
from .models import *

from django.contrib.auth.models import User

class UserSerializer(serializers.ModelSerializer):

    class Meta:
        model = User
        fields = ('username', 'email','password')


class ProfileSerializer(serializers.ModelSerializer):
    user = UserSerializer()
    
    class Meta:
        model = Profile
        fields = '__all__'
    
    def create(self,validated_data):
        # user_serializer = UserSerializer(data=validated_data.get('user'))
        user_data = validated_data.pop('user')
        print(validated_data)
        # username = validated_data['username']
        # password = validated_data['password']
        # email = validated_data['email']
        user = User.objects.create(**user_data)
        p = Profile.objects.create(user=user,lat=validated_data['lat'],lang=validated_data['lang'])
        p.follows.set(validated_data['follows'])
        return p