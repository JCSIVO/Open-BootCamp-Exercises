from django.shortcuts import render
from django.http import HttpResponse 
from .models import Reporter, Article
from datetime import date

def create(request):
    rep = Reporter(first_name='Blanca', last_name='Casaña', email='blanca@example.com')
    rep.save()

    art1 = Article(headline='Lorem Ipsum dolot', pub_date=date(2022,7,7), reporter=rep )
    art1.save() 
    art2 = Article(headline='Lorem Set', pub_date=date(2022,8,9), reporter=rep )
    art2.save() 
    art3 = Article(headline='Ipsum Set dolot', pub_date=date(2023,2,3), reporter=rep )
    art3.save() 
    art4 = Article(headline='Dolot Set ipsum lorem', pub_date=date(2023,3,3), reporter=rep )
    art4.save()    

    # result = art1.reporter.first_name
    # return HttpResponse(result)

    # result = rep.article_set.all()
    # result = rep.article_set.filter(headline='Ipsum Set dolot')
    result = rep.article_set.count()

    return HttpResponse(result)