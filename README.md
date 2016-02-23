#WordPress FrontFacing Plugin
A very basic scaffold for a word press plugin with no admin area functionality

##Installation

###Clone the repo
```
git clone https://github.com/djm204/frontend-only-wp-plugin-scaffold.git
```

###Must Change
1. The Plugin info at the top of the 'your-plugin-name.php'
2. your-plugin-name.php => change it to your plugin name.
3. This readme (README.md)

#### Removing the commit history
The simplest way is to delete the `.git/` folder and re-initialise the repository:
```
rm -rf .git/
git init
git add --all
git commit -m "Initial commit"
git remote add origin https://github.com/my-username/my-repo.git
git push origin master
```
