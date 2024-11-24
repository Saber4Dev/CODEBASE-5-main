# import os

# def draw_tree(root_dir, indent=''):
#     items = os.listdir(root_dir)
#     items = [item for item in items if not item.startswith('.') and item not in ['Vendor', '.backup v10', 'bk', 'bootstrap']]  # Ignore hidden files/folders and 'Vendor'
#     tree_text = ""
#     for i, item in enumerate(items):
#         path = os.path.join(root_dir, item)
#         is_last = i == len(items) - 1
#         marker = '|-- ' if is_last else '|   '
        
#         tree_text += indent + marker + item + "\n"
        
#         if os.path.isdir(path):
#             new_indent = indent + ('    ' if is_last else '|   ')
#             tree_text += draw_tree(path, new_indent)
    
#     return tree_text


# if __name__ == '__main__':
#     current_dir = os.getcwd()
#     print(current_dir)
#     tree = draw_tree(current_dir)
#     print(tree)
    
#     file_name = "tree.txt"
#     with open(file_name, "w") as file:
#         file.write(tree)
#     print("Tree structure saved to", file_name)

# ONLY SEARCH IN A SPIECIFC FOLDER 
import os

def draw_tree(root_dir, target_folders, indent=''):
    items = os.listdir(root_dir)
    items = [item for item in items if not item.startswith('.')]

    tree_text = ""
    for i, item in enumerate(items):
        path = os.path.join(root_dir, item)
        is_last = i == len(items) - 1
        marker = '|-- ' if is_last else '|   '

        if os.path.isdir(path):
            if item in target_folders:
                tree_text += indent + marker + item + "\n"
                new_indent = indent + ('    ' if is_last else '|   ')
                tree_text += draw_tree(path, target_folders, new_indent)
            elif any(target_folder in path for target_folder in target_folders):
                tree_text += indent + marker + item + "\n"
                new_indent = indent + ('    ' if is_last else '|   ')
                tree_text += draw_tree(path, target_folders, new_indent)
        else:
            tree_text += indent + marker + item + "\n"

    return tree_text

if __name__ == '__main__':
    current_dir = os.getcwd()
    target_folders = ['app', 'config', 'routes', 'resources', 'database']
    
    print(current_dir)
    tree = draw_tree(current_dir, target_folders)
    print(tree)
    
    file_name = "Project-Tree.txt"
    with open(file_name, "w") as file:
        file.write(tree)
    print("Tree structure saved to", file_name)
