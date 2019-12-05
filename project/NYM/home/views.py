from django.shortcuts import render, get_object_or_404
from .models import Post
from django.views.generic import ListView, DetailView, CreateView, UpdateView, DeleteView
from django.contrib.auth.mixins import LoginRequiredMixin, UserPassesTestMixin   # для написания поста: проверяет авторизован ли юзер и пренадлежит ли пост юзеру
from django.contrib.auth.models import User

def home(request):
    context = {
        'posts': Post.objects.all()
    }
    return render(request, 'home/home.html', context)     # might me an error


class PostListView(ListView):
    model = Post
    template_name = 'home/home.html'  # <app>/<model>_<viewtype>.html
    context_object_name = 'posts'
    ordering = ['-date']  # показывать сначала новые посты
    paginate_by = 8   # число постов на одну страницу


class UserPostListView(ListView):
    model = Post
    template_name = 'home/user_posts.html'  # <app>/<model>_<viewtype>.html
    context_object_name = 'posts'
    paginate_by = 8  # число постов на одну страницу

    def get_queryset(self):
        user = get_object_or_404(User, username=self.kwargs.get('username'))
        return Post.objects.filter(author=user).order_by('-date')


class PostDetailView(DetailView):
    model = Post


class PostCreateView(LoginRequiredMixin, CreateView):
    model = Post
    fields = ['title', 'content']

    def form_valid(self, form):
        form.instance.author = self.request.user
        return super().form_valid(form)


class PostUpdateView(LoginRequiredMixin, UserPassesTestMixin, UpdateView):
    model = Post
    fields = ['title', 'content']

    def form_valid(self, form):
        form.instance.author = self.request.user
        return super().form_valid(form)

    def test_func(self):
        post = self.get_object()
        if self.request.user == post.author:    # проверяет является ли юзер автором поста
            return True
        return False


class PostDeleteView(LoginRequiredMixin, UserPassesTestMixin, DeleteView):
    model = Post
    success_url = '/'  # перенаправление на основную страницу после удаления поста

    def test_func(self):
        post = self.get_object()
        if self.request.user == post.author:    # проверяет является ли юзер автором поста
            return True
        return False


def about(request):
    return render(request, 'home/info.html', {'title': 'About'})


def abouts(request):
    return render(request, 'home/about.html', {'title': 'About us'})


def classes(request):
    return render(request, 'home/classes.html', {'title': 'Classes'})


def index(request):
    return render(request, 'home/index.html', {'title': 'NYM'})


def contact(request):
    return render(request, 'home/contact.html', {'title': 'Contacts'})


def trainings(request):
    return render(request, 'home/trainings.html', {'title': 'Trainings'})


def schedule(request):
    return render(request, 'home/schedule.html', {'title': 'Schedule'})