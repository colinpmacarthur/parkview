'''
Created on Apr 12, 2014

@author: colin
'''

import csv

def build_csv (input_file_path, output_file_path,
                      row_callback, field_names_callback,
                      output_file_encoding="utf-8",
                      input_file_encoding="utf-8"):
    """Import a csv, modify and export it.

    Keyword arguments:
    input_file_path -- path to the csv file to import
    input_file_encoding -- encoding of input file (default utf-8)
    output_file_path -- path to the csv file to output
    output_file_encoding -- encoding of output file (default utf-8)
    row_callback -- a function to call for each row of the
      file. Is passed a single argument, row, which is an array
      with an item for each column in the row. Should return a similar
      array of row objects.
    field_names_callback -- a function called for the field names array
    """
        
    # Open file to import
    with open (input_file_path, newline='', 
               encoding=input_file_encoding) as csv_input_file:

        # Open csv reader class wth file
        csvreader = csv.DictReader (csv_input_file, delimiter=",", 
                                    quoting=csv.QUOTE_MINIMAL)
                    
        with open (output_file_path, "w", newline='', 
                   encoding=output_file_encoding) as csv_output_file:
            
            # Apply callback function to field names
            field_names = field_names_callback(csvreader.fieldnames)
            
            # Open csv write class with file
            csvwriter = csv.DictWriter (csv_output_file,
                                        fieldnames = field_names,
                                        quoting=csv.QUOTE_ALL)
            
            # Write the header row
            csvwriter.writeheader()
            
            # Go through the rest of the rows
            for row in csvreader:

                # Apply callback function to row
                rows = row_callback (row)
                
                # Write row
                if rows != 'false':
                    csvwriter.writerows (rows)
            
    print ("Done importing and writing files.")
