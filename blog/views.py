from django.shortcuts import render, get_object_or_404
from django.shortcuts import render
from django.utils import timezone
from .models import Publicacion
from .forms import PublicacionForm
from django.shortcuts import redirect
from django.contrib.auth.decorators import login_required
# Create your views here.

def listar_pub(request):
    pub = Publicacion.objects.filter(fecha_publicacion__lte=timezone.now()).order_by('fecha_publicacion')
    return render(request, 'blog/listar_pub.html', {'pub':pub})

@login_required
def detalle_pub(request, pk):
    p = get_object_or_404(Publicacion, pk=pk)
    return render(request, 'blog/detalle_publicacion.html', {'p': p})

@login_required
def post_new(request):
    if request.method == "POST":
        form = PublicacionForm(request.POST)
        if form.is_valid():
            post = form.save(commit=False)
            post.author = request.user
            post.save()
            return redirect('postear', pk=post.pk)
    else:
        form = PublicacionForm()
    return render(request, 'blog/post_edit.html', {'form': form})

@login_required
def post_edit(request, pk):
    post = get_object_or_404(Publicacion, pk=pk)
    if request.method == "POST":
        form = PublicacionForm(request.POST, instance=post)
        if form.is_valid():
            post = form.save(commit=False)
            post.author = request.user
            post.save()
            return redirect('postear', pk=post.pk)
    else:
        form = PublicacionForm(instance=post)
    return render(request, 'blog/post_edit.html', {'form': form})

@login_required
def post_draft_list(request):
    posts = Publicacion.objects.filter(fecha_publicacion__isnull=True).order_by('fecha_creacion')
    return render(request, 'blog/post_draft_list.html', {'posts': posts})

@login_required
def post_publish(request, pk):
    post = get_object_or_404(Publicacion, pk=pk)
    post.publish()
    return redirect('postear', pk=pk)

@login_required
def post_remove(request, pk):
    post = get_object_or_404(Publicacion, pk=pk)
    post.delete()
    return redirect('post_list')
