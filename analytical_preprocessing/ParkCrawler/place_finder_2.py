'''
Created on Mar 21, 2014

@author: colin
'''

import csv_builder
import re

places_to_find = [ 
                  { "name" : "Bumpass Hell" , "regex" : "[bB]ump[ea]"}, 
                  { "name" : "Manzanita Lake" , "regex" : "[mM]anz"}, 
                  { "name" : "Visitor Center" , "regex" : "[vV]isitor [cC]ent"},
                  { "name" : "Sulphur Works" , "regex" : "[sS]ulph[eau]r [wW]ork"},
                  { "name" : "King's Creek" , "regex" : "[kK]ing'*s [cC]r[ea]"},
                  { "name" : "Southwest Campground" , "regex" : "[sS]outhwest"},
                  { "name" : "Warner Valley" , "regex" : "[wW][ea]rn[ea]r"},
                  { "name" : "Summit Lake" , "regex" : "[sS]umm*it]"},
                  { "name" : "Mount Lassen" , "regex" : "[mM](oun)t.* [lL]ass*en"},
                  { "name" : "Fantastic Lava Beds" , "regex" : "[Ff]antastic [lL]"},
                  { "name" : "Boiling Springs Lake" , "regex" : "[Bb]oiling [Ss]prin"},
                  { "name" : "Devil's Kitchen" , "regex" : "[dD]evil'*s [kK]it"},
                  { "name" : "Juniper Lake" , "regex" : "[jJ]uniper lake"},
                  { "name" : "Terminal Geyser" , "regex" : "[tT]erminal [gG]"},
                  { "name" : "Snag Lake" , "regex" : "[sS]nag [lL]"},
                  { "name" : "Cliff Lake" , "regex" : "[cC]liff [lL]"}
                  ]

def default_callback (row):
    """
    Simple callback function for csv_column adder that simply returns
    the row it's passed, unmodified.
    
    row -- a row dictionary from csv_modifier
    """
    return row

def create_rows_for_each_mentioned_place (row):
    """
    Callback function that uses a regular expression to look
    in the comments field for place names and adds
    new rows accordingly.
    """
    new_rows = []
    for place in places_to_find:
        if len(place['re_obj'].findall(row[comment_column_name])) > 0:
            new_rows.append({
                             'id' : row['id'],
                             'place' : place['name']
                             }) 
    if len(new_rows) > 0:
        return new_rows
    else:
        return 'false'

def new_field_names (field_names):
    """
    Callback function that returns column names
    for new csv.
    """
    return ['id','place']

def compile_regular_expressions(dictionary):
    for row in dictionary:
        row['re_obj'] = re.compile(row['regex'])

compile_regular_expressions(places_to_find)
'''
comment_column_name = "title"
csv_builder.build_csv (
    input_file_path = "flickr_sentiment.csv",
    output_file_path = "newest_flickr_title.csv",
    row_callback = create_rows_for_each_mentioned_place,
    field_names_callback = new_field_names
    )
comment_column_name = "description"
csv_builder.build_csv (
    input_file_path = "flickr_sentiment.csv",
    output_file_path = "newest_flickr_description.csv",
    row_callback = create_rows_for_each_mentioned_place,
    field_names_callback = new_field_names
    )
comment_column_name = "comment"
csv_builder.build_csv (
    input_file_path = "yelp_sentiment.csv",
    output_file_path = "newest_yelp.csv",
    row_callback = create_rows_for_each_mentioned_place,
    field_names_callback = new_field_names
    )
comment_column_name = "tweet"
csv_builder.build_csv (
    input_file_path = "twitter_excel_sentiment.csv",
    output_file_path = "newest_twitter.csv",
    row_callback = create_rows_for_each_mentioned_place,
    field_names_callback = new_field_names
    )
    '''
comment_column_name = "comment"
csv_builder.build_csv (
    input_file_path = "140424-lassen-tripadvisor.csv",
    output_file_path = "140424_sitesfromtripadvisor.csv",
    row_callback = create_rows_for_each_mentioned_place,
    field_names_callback = new_field_names
    )