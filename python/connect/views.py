from django.shortcuts import render

from connect import get_connect_link


def connect_to_sequencing_com(request):
    return render(request, 'connect.html', {'connect_link': get_connect_link()})
