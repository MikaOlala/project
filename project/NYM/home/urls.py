from django.contrib import admin
from django.urls import path
from . import views
from .views import PostListView, PostDetailView, PostCreateView, PostUpdateView, PostDeleteView, UserPostListView

urlpatterns = [
    path('info/', views.about, name='info-page'),
    path('about/', views.abouts, name='about-page'),
    path('classes/', views.classes, name='classes-page'),
    path('trainings/', views.trainings, name='trainings-page'),
    path('schedule/', views.schedule, name='schedule-page'),
    path('home/', views.index, name='index-page'),
    path('contact/', views.contact, name='contact-page'),
    path('', PostListView.as_view(), name='main-page'),
    path('post/<int:pk>/', PostDetailView.as_view(), name='post-detail'),
    path('post/<int:pk>/update/', PostUpdateView.as_view(), name='post-update'),
    path('post/<int:pk>/delete/', PostDeleteView.as_view(), name='post-delete'),
    path('post/new/', PostCreateView.as_view(), name='post-create'),
    path('user/<str:username>', UserPostListView.as_view(), name='user-posts'),

]
