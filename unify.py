import os

def getLibs(rootdir):
 libs = []
 for subdir, dirs, files in os.walk(rootdir):
     for file in files:
         libs.append(os.path.join(subdir, file)) 
 return libs


def file_get_contents(filename):
    with open(filename) as f:
        return f.read()


def writeFile(file, content):
	f = open(file, "w")
	f.write(content)
	f.close()

def updateNamespace(file):
	content = file_get_contents(file)
	content = content.replace("Swagger\\Client", "IMN\\Swagger\\Client")
	writeFile(file,content)


def fixSerializerBug(currDir):
	file = currDir + "/lib/ObjectSerializer.php"
	content = file_get_contents(file)
	content = content.replace("$discriminator = $class::DISCRIMINATOR;", "$discriminator = null;\n      if(\defined($class.'::DISCRIMINATOR')) {\n       $discriminator = $class::DISCRIMINATOR;\n      }")
	content = content.replace("foreach ($instance::swaggerTypes() as $property => $type) {", "if(!\method_exists($instance, 'swaggerTypes')) {\n       return $instance;\n      }\n      foreach ($instance::swaggerTypes() as $property => $type) {")
	writeFile(file,content)



rootdir = os.getcwd()
fixSerializerBug(rootdir)
libs = getLibs(rootdir)
for lib in libs:
	print(lib)
	updateNamespace(lib)

