SELECT categories.id, categories.name, GROUP_CONCAT(hobbies.name) FROM categories,hobbies WHERE categories.id = hobbies.person_id GROUP BY hobbies.person_id;
